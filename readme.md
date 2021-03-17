## Intentions

- Provide super common block styles that you'd want on 90%+ of sites you build.
- Put this in the plugin repository for push updates to any site.

## Block Styles So Far

- List Block
	- No Markers
	- Responsive Multiple Columns
- File Block
	- Button Only

## Other Ideas for Consideration

- Group Block
	- Grid Container
- Columns
	- No Gap
	- Full-height contents
	- Button at bottom
- _Looking forward to more!_

## Initial Decisions

All decisions up for discussion!

- No options but a filter to allow hiding block styles.
- Totally separate front-end and editor styles. They will have to be different frequently enough that we might as well always make them different for clarity.
- Use `!important` on everything. These are utility classes and should essentially never be overridden.
	- Use as few selectors as possible to make these styles relatively easy to override if you have to.
- No build process. The styles should be so minimal that nesting and variables likely don't provide enough value to warrant overhead.

## Contribution

1. Open an issue with an idea for a new block style
2. Get consensus on whether it meets criteria for inclusion and any implementation concerns
3. Submit PR
