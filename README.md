<h1 align="center"><a href="https://api-platform.com"><img src="https://api-platform.com/images/logos/Logo_Circle%20webby%20text%20blue.png" alt="API Platform" width="250" height="250"></a></h1>

API Platform is a next-generation web framework designed to easily create API-first projects without compromising extensibility
and flexibility:

* Design your own data model as plain old PHP classes or [**import an existing ontology**](https://api-platform.com/docs/schema-generator).
* **Expose in minutes a hypermedia REST or a GraphQL API** with pagination, data validation, access control, relation embedding,
  filters, and error handling...
* Benefit from Content Negotiation: [GraphQL](https://api-platform.com/docs/core/graphql/), [JSON-LD](https://json-ld.org), [Hydra](https://hydra-cg.com),
  [HAL](https://github.com/mikekelly/hal_specification/blob/master/hal_specification.md), [JSON:API](https://jsonapi.org/), [YAML](https://yaml.org/), [JSON](https://www.json.org/), [XML](https://www.w3.org/XML/) and [CSV](https://www.ietf.org/rfc/rfc4180.txt) are supported out of the box.
* Enjoy the **beautiful automatically generated API documentation** ([OpenAPI](https://api-platform.com/docs/core/openapi/)).
* Add [**a convenient Material Design administration interface**](https://api-platform.com/docs/admin) built with [React](https://reactjs.org/)
  without writing a line of code.
* **Scaffold fully functional Progressive-Web-Apps and mobile apps** built with [Next.js](https://api-platform.com/docs/client-generator/nextjs/) (React),
[Nuxt.js](https://api-platform.com/docs/client-generator/nuxtjs/) (Vue.js) or [React Native](https://api-platform.com/docs/client-generator/react-native/)
thanks to [the client generator](https://api-platform.com/docs/client-generator/) (a Vue.js generator is also available).
* Install a development environment and deploy your project in production using **[Docker](https://api-platform.com/docs/distribution)**
and [Kubernetes](https://api-platform.com/docs/deployment/kubernetes).
* Easily add **[OAuth](https://oauth.net/) authentication**.
* Create specs and tests with **[a developer friendly API testing tool](https://api-platform.com/docs/distribution/testing/)**.

[![GitHub Actions](https://github.com/api-platform/core/workflows/CI/badge.svg)](https://github.com/api-platform/core/actions?workflow=CI)
[![Codecov](https://codecov.io/gh/api-platform/core/branch/master/graph/badge.svg)](https://codecov.io/gh/api-platform/core/branch/master)

## About Bump.sh

[![Bump.sh](https://bump.sh/packs/static/552d538eeb0cd5a2aed3.svg)](https://bump.sh)

This repo has been adapted for API Platform 2023 conference, to provide a live example
of how an API changelog can easily built with [Bump.sh](https://bump.sh).

The API documentation demo is available here:
https://bump.sh/demo/doc/apiplatform-test-demo

The API changelog follows the API contract, i.e., the OpenAPI specification.
Thus, persisting the OpenAPI contract during the API lifecycle is necessary.

We're sure there are many ways to do it; this repo implements an example,
based on API Platform command `api:openapi:export`, and a GitHub action.

1. Initialize OpenAPI specification on a given path (here, 'docs/openapi.json') by running `php bin/console api:openapi:export > docs/openapi.json` (in this repo, you can also run `bash docs/persist.sh`)
2. Create API documentation on Bump.sh.
3. On Bump.sh 'CI deployments' page, get API slug and token. We suggest to copy-paste GitHub action script into a new workflow (that's what we did on .github/workflows/bump.yml).
4. Back on ApiPlatform, each time you change your API contract, persist changes in OpenAPI contact, by running `bash docs/persist.sh`
5. On GitHub, for each deployment on a branch (new branch, new commit, or even push --force), update the OpenAPI contract, too. Thus, Bump.sh adds a comment in PR each time a structure change is detected (for example https://github.com/bump-sh/Api-Platform-Demo/pull/9#issuecomment-1728142508 )
6. By merging your branch on GitHub, your API documentation is also updated. And structure change is added to [API changelog](https://bump.sh/demo/doc/apiplatform-test-demo/changes)

Find more details about how to connect Bump.sh and ApiPlatform in our [getting started guides](https://docs.bump.sh/help/getting-started/api-platform/)

## More about API Platform

The official project documentation is available **[on the API Platform website](https://api-platform.com)**.

API Platform embraces open web standards and the
[Linked Data](https://www.w3.org/standards/semanticweb/data) movement. Your API will automatically expose structured data.
It means that your API Platform application is usable **out of the box** with technologies of
the semantic web.

It also means that **your SEO will be improved** because **[Google leverages these formats](https://developers.google.com/search/docs/guides/intro-structured-data)**.

Last but not least, the server component of API Platform is built on top of the [Symfony](https://symfony.com) framework,
while client components leverage [React](https://reactjs.org/) ([Vue.js](https://vuejs.org/) flavors are also available).
It means that you can:

* Use **thousands of Symfony bundles and React components** with API Platform.
* Integrate API Platform in **any existing Symfony, React, or Vue application**.
* Reuse **all your Symfony and JavaScript skills**, and benefit from the incredible amount of documentation available.
* Enjoy the popular [Doctrine ORM](https://www.doctrine-project.org/projects/orm.html) (used by default, but fully optional:
  you can use the data provider you want, including but not limited to MongoDB and Elasticsearch)

## Install

[Read the official "Getting Started" guide](https://api-platform.com/docs/distribution).

## Credits

Created by [Kévin Dunglas](https://dunglas.fr). Commercial support is available at [Les-Tilleuls.coop](https://les-tilleuls.coop).
