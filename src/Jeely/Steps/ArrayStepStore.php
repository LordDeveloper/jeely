<?php

namespace Jeely\Steps;

/**
 * In-memory store (process lifetime).
 */
final class ArrayStepStore implements StepStoreInterface
{
    /** @var array<string, StepSession> */
    private array $sessions = [];

    public function get(StepKey $key): ?StepSession
    {
        $session = $this->sessions[$key->toString()] ?? null;
        if ($session === null) {
            return null;
        }

        if ($session->isExpired()) {
            unset($this->sessions[$key->toString()]);

            return null;
        }

        return $session;
    }

    public function put(StepSession $session): void
    {
        $this->sessions[$session->key->toString()] = $session;
    }

    public function delete(StepKey $key): void
    {
        unset($this->sessions[$key->toString()]);
    }

    public function prune(): int
    {
        $removed = 0;
        foreach ($this->sessions as $id => $session) {
            if ($session->isExpired()) {
                unset($this->sessions[$id]);
                $removed++;
            }
        }

        return $removed;
    }
}
