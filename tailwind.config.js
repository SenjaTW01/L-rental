export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            'primary': '#26577C',
            'secondary': '#FFFFFF',
            'nav-color': '#1F4867',
            'sec3': '#E4E4E4'
        },
        extend: {
            spacing: {
                '135': '35rem',
                '27': '6.5rem'
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                Black_Ops_One: ['Black Ops One', 'sans-serif'],
                ubuntu: ['ubuntu', 'sans-serif']
            },
        },
    },
    plugins: [],
}
