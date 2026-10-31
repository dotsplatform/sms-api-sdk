# Review: SMS delivery reports (sms-api-sdk)

Branch `feature-sms-delivery-reports`, pairs with the sms service branch of the same name
(see sms `ai/review/2026-10-31-sms-delivery-reports.review.md`). **No tag yet** — the owner tags after review.

## Changes
- `SmsMessageDTO::externalReference` (optional): sent as `externalReference` in `POST /api/accounts/{id}/sms`
  only when set, so callers that do not set it send exactly the same body as before.
- `SmsService::getDeliveryCountsByReferences(accountId, references)` / `SmsHttpClient::getDeliveryCountsByReferences()`:
  `GET /api/accounts/{id}/sms/statistics/delivery-by-reference?references[]=…` (max 100 references per call).
  Returns `SmsDeliveryCountsList` keyed by reference (`findByReference()`), items `SmsDeliveryCountsDTO`
  (`total, sent, notSent, delivered, failed, pending, notReported`). Errors are thrown (like `getSmsCountByPhones`).
- `TurboSmsDTO::webhookSecret`: provider setting for the signed TurboSMS delivery webhook.

## Breaking changes
None. Database: none (SDK).

## Compatibility / deploy order
Deploy the sms service first: an old sms service ignores `externalReference` and answers 404 on the counts URL
(`HttpClient::get()` maps 404 to an empty list).

## Tests
The package has no test suite; `php -l` on changed files and a DTO smoke script (fromArray / findByReference).
