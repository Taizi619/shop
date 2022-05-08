module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            inset:{
                '1/12': '8.333333%',
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
