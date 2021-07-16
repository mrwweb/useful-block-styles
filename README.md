## Intentions

- Provide super common block styles for text-related blocks that you'd want on 90%+ of sites you build.
- Put this in the plugin repository for push updates to any site.

## Block Styles So Far

- Heading
	- Screen Reader Text
- List Block
	- No Markers
	- Responsive Multiple Columns
- File Block
	- Button Only

## Initial Decisions

All decisions up for discussion!

- No options but a filter (`wpsea_block_styles`) to allow hiding block styles.
- Totally separate front-end and editor styles. They will have to be different frequently enough that we might as well always make them different for clarity.
- Use `!important` on everything. These are utility classes and should essentially never be overridden.
	- Use as few selectors as possible to make these styles relatively easy to override if you have to.
- No build process. The styles should be so minimal that nesting and variables likely don't provide enough value to warrant overhead.
- This plugin will use [semver](https://semver.org/)

## Tested so far
- Twenty Twenty
- Twenty Twenty One
- Michelle

## Other Ideas for Consideration

- _Looking forward to more!_

## Contribution

See [`CONTRIBUTING.md`](https://github.com/mrwweb/useful-block-styles/blob/main/contributing.md)

tl;dr - Open an issue before a PR.
