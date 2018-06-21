const _ = require('lodash')

module.exports = function ({ gradients, variants }) {
    return function ({ addUtilities, e }) {
        const utilities = _.map(gradients, ([start, end], name) => ({
            [`.bg-gradient-${e(name)}`]: {
                backgroundImage: `linear-gradient(to bottom right, ${start}, ${end})`
            }
        }))

        addUtilities(utilities, variants)
    }
}