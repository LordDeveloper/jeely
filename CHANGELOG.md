# Changelog

All notable changes to this project are documented here.

## 2.1.0 — 2026-08-28

### Added

- **Step Manager** (`Jeely\Steps`) — multi-step conversation flows with `enter` / `handle` / `validate`, flow-level and per-step data, TTL sessions, and navigation (`next`, `back`, `jump`, `repeat`, `stay`, `cancel`, `complete`). Stores: `ArrayStepStore`, `CacheStepStore`. Validators via `StepValidators`.
- **Cache** (`Jeely\Cache`) — `CacheInterface` with `ArrayCache`, `FileCache`, `ApcuCache`, and static `Cache` facade (`get`, `set`, `remember`, etc.).
- **Database / ORM** (`Jeely\Database`) — PDO `Connection`, `QueryBuilder`, `Schema` / `Blueprint`, Active Record `Model` with casts and fillable attributes.
- **Logger** (`Jeely\Log`) — leveled logging with pluggable writers; `Logger::stderr()` and `NullLogger`.
- **HTTP server** (`Jeely\Server\HttpServer`) — minimal webhook listener using PHP sockets and Revolt.
- **Async utilities** — `Loop`, `Timer` helpers.
- Tests for Cache, ORM, and Step Manager (34 tests total).

### Changed

- Rich message support (`sendRichMessage`, `sendRichMessageDraft`) in Telegram client.
- Updater / async polling improvements.
- `.gitignore` updated for local examples and runtime storage.

## 2.0.0

- Replaced LazyJsonMapper with Nectar; modernized Bot API layer.
