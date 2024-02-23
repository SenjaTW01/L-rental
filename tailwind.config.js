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
            nav_color: "#1F4867",
            gray_white: "rgb(241 245 249)",
            sec3: "#E4E4E4",
            heading: "#164e63",
        },
        extend: {
            spacing: {
                135: "35rem",
                27: "6.5rem",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                Black_Ops_One: ["Black Ops One", "sans-serif"],
                ubuntu: ["ubuntu", "sans-serif"],
            },
        },
    },
    plugins: [],
};
