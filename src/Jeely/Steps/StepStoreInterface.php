<?php

namespace Jeely\Steps;

interface StepStoreInterface
{
    public function get(StepKey $key): ?StepSession;

    public function put(StepSession $session): void;

    public function delete(StepKey $key): void;

    /**
     * Optional: remove expired sessions (best-effort).
     */
    public function prune(): int;
}
