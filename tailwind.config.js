module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        darkMode: 'class',
        extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
