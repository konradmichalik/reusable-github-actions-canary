# reusable-github-actions-canary

Throwaway consumer for [konradmichalik/reusable-github-actions](https://github.com/konradmichalik/reusable-github-actions), built for [issue #48](https://github.com/konradmichalik/reusable-github-actions/issues/48).

> [!IMPORTANT]
> Do not depend on this repository. It exists to break loudly when a change
> to the reusable workflows would otherwise reach 39+ consumers unnoticed.
> It deliberately stays on `@main` rather than a pinned SHA, and is excluded
> from `docs/inventory.md` in the source repository on purpose.

## What calls what

- `.github/workflows/canary.yml` — daily schedule plus `workflow_dispatch`, calls `cgl.yml`, `cgl-test.yml`, `tests-php.yml`, `tests-typo3.yml`, `security.yml`, `scorecard.yml`
- `.github/workflows/canary-release.yml` — triggered by pushing a tag, calls `release.yml` and `release-typo3.yml`. Not run automatically: push a tag here manually when a change to either release workflow needs exercising. `TYPO3_API_TOKEN` is set to a placeholder value, so the TER-publish step is expected to fail against the real TER API; everything before that step is still exercised.

## Before releasing a change to the source repository

Run `workflow_dispatch` on `canary.yml` against the branch under test (change the `@main` refs in this repo's workflow files temporarily, or use a manual dispatch with a ref override) and confirm it is green before merging.
