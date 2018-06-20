# Contributing

Contributions are welcome and will be fully credited, they are accepted via Pull Requests on [Github](https://github.com/jeroen-g/crosswind).

#Style guide
The strength of Tailwind CSS lies in the extensive use of utility classes. Even though it is very much based on opinion, please structure the order of the utilities for Crosswind elements from outside to the inside, with all colours at the end, for example:

`w-1/4 mr-6 mb-6 p-6 rounded-lg shadow overflow-hidden bg-white`
`flex flex-wrap items-center justify-between p-4 shadow rounded-t-lg text-blue hover:text-blue-dark`

# Things you could do
If you want to contribute but do not know where to start, this list provides some starting points.
- Tailwind.js setup
- Proper loading of assets (fontawesome, tailwindcss)
- Additional block styles
- A Laravel preset command
- Some javascript to make things happen (e.g. switches)
- Styled pages for users, posts, settings, profile, search results (these do not have to be functional)
- Set up TravisCI, StyleCI
- Write a comprehensive ReadMe

## Pull Requests

- **Add tests!** - Your patch won't be accepted if it doesn't have tests.

- **Document any change in behaviour** - Make sure the `readme.md` and any other relevant documentation are kept up-to-date.

- **Consider our release cycle** - We try to follow [SemVer v2.0.0](http://semver.org/). Randomly breaking public APIs is not an option.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please [squash them](http://www.git-scm.com/book/en/v2/Git-Tools-Rewriting-History#Changing-Multiple-Commit-Messages) before submitting.


**Happy coding**!
