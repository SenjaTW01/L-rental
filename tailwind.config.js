export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            primary: "#26577C",
            secondary: "#FFFFFF",
            "nav-color": "#1F4867",
            "gray-white": "rgb(241 245 249);",
        },
        extend: {
            spacing: {
                135: "35rem",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                Black_Ops_One: ["Black Ops One", "sans-serif"],
            },
        },
    },
    plugins: [],
};
