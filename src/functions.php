<?php

use GuzzleHttp\Promise\AggregateException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\TaskQueueInterface;
use GuzzleHttp\Promise\Utils;

if (! function_exists('queue')) {
    /**
     * Get the global task queue used for promise resolution.
     *
     * This task queue MUST be run in an event loop in order for promises to be
     * settled asynchronously. It will be automatically run when synchronously
     * waiting on a promise.
     *
     * <code>
     * while ($eventLoop->isRunning()) {
     *     GuzzleHttp\Promise\Utils::queue()->run();
     * }
     * </code>
     *
     * @param TaskQueueInterface $assign Optionally specify a new queue instance.
     *
     * @return TaskQueueInterface
     */
    function queue(TaskQueueInterface $assign = null)
    {
        return Utils::queue($assign);
    }
}

if (! function_exists('task')) {
    /**
     * Adds a function to run in the task queue when it is next `run()` and
     * returns a promise that is fulfilled or rejected with the result.
     *
     * @param callable $task Task function to run.
     *
     * @return PromiseInterface
     */
    function task(callable $task)
    {
        return Utils::task($task);
    }
}

if (! function_exists('inspect')) {
    /**
     * Synchronously waits on a promise to resolve and returns an inspection
     * state array.
     *
     * Returns a state associative array containing a "state" key mapping to a
     * valid promise state. If the state of the promise is "fulfilled", the
     * array will contain a "value" key mapping to the fulfilled value of the
     * promise. If the promise is rejected, the array will contain a "reason"
     * key mapping to the rejection reason of the promise.
     *
     * @param PromiseInterface $promise Promise or value.
     *
     * @return array
     */
    function inspect(PromiseInterface $promise)
    {
        return Utils::inspect($promise);
    }
}

if (! function_exists('inspect_all')) {
    /**
     * Waits on all of the provided promises, but does not unwrap rejected
     * promises as thrown exception.
     *
     * Returns an array of inspection state arrays.
     *
     * @see inspect for the inspection state array format.
     *
     * @param PromiseInterface[] $promises Traversable of promises to wait upon.
     *
     * @return array
     */
    function inspect_all($promises)
    {
        return Utils::inspectAll($promises);
    }
}


if (! function_exists('unwrap')) {
    /**
     * Waits on all of the provided promises and returns the fulfilled values.
     *
     * Returns an array that contains the value of each promise (in the same
     * order the promises were provided). An exception is thrown if any of the
     * promises are rejected.
     *
     * @param iterable<PromiseInterface> $promises Iterable of PromiseInterface objects to wait on.
     *
     * @return array
     *
     * @throws \Exception on error
     * @throws \Throwable on error in PHP >=7
     */
    function unwrap($promises)
    {
        return Utils::unwrap($promises);
    }
}

if (! function_exists('all')) {
    /**
     * Given an array of promises, return a promise that is fulfilled when all
     * the items in the array are fulfilled.
     *
     * The promise's fulfillment value is an array with fulfillment values at
     * respective positions to the original array. If any promise in the array
     * rejects, the returned promise is rejected with the rejection reason.
     *
     * @param mixed $promises  Promises or values.
     * @param bool  $recursive If true, resolves new promises that might have been added to the stack during its own resolution.
     *
     * @return PromiseInterface
     */
    function all($promises, $recursive = false)
    {
        return Utils::all($promises, $recursive);
    }
}

if (! function_exists('some')) {
    /**
     * Initiate a competitive race between multiple promises or values (values
     * will become immediately fulfilled promises).
     *
     * When count amount of promises have been fulfilled, the returned promise
     * is fulfilled with an array that contains the fulfillment values of the
     * winners in order of resolution.
     *
     * This promise is rejected with a {@see AggregateException} if the number
     * of fulfilled promises is less than the desired $count.
     *
     * @param int   $count    Total number of promises.
     * @param mixed $promises Promises or values.
     *
     * @return PromiseInterface
     */
    function some($count, $promises)
    {
        return Utils::some($count, $promises);
    }
}

if (! function_exists('any')) {
    /**
     * Like some(), with 1 as count. However, if the promise fulfills, the
     * fulfillment value is not an array of 1 but the value directly.
     *
     * @param mixed $promises Promises or values.
     *
     * @return PromiseInterface
     */
    function any($promises)
    {
        return Utils::any($promises);
    }
}

if (! function_exists('settle')) {
    /**
     * Returns a promise that is fulfilled when all of the provided promises have
     * been fulfilled or rejected.
     *
     * The returned promise is fulfilled with an array of inspection state arrays.
     *
     * @see inspect for the inspection state array format.
     *
     * @param mixed $promises Promises or values.
     *
     * @return PromiseInterface
     */
    function settle($promises)
    {
        return Utils::settle($promises);
    }
}

if (! function_exists('wait')) {
    /**
     * Waits until the promise completes if possible.
     *
     * Pass $unwrap as true to unwrap the result of the promise, either
     * returning the resolved value or throwing the rejected exception.
     *
     * If the promise cannot be waited on, then the promise will be rejected.
     *
     * @param bool $unwrap
     *
     * @return mixed
     *
     * @throws \LogicException if the promise has no wait function or if the
     *                         promise does not settle after waiting.
     */
    function wait(PromiseInterface $promise, bool $unwrap = true)
    {
        return $promise->wait($unwrap);
    }
}