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
            'sec3': '#E4E4E4',
            'heading': '#164e63',
            'text_desk': '#414042'

        },
        extend: {
            spacing: {
                '135': '35rem',
                '27': '6.5rem',
                // card size
                '365': '365px'
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                Black_Ops_One: ['Black Ops One', 'sans-serif'],
                ubuntu: ['ubuntu', 'sans-serif']
            },
            fontSize: {
                'smn': '8px'
            },
        },
    },
    plugins: [],
}
