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
            text_desk: "#414042",
            footer: "#388CCB",
            white: "#ffffff",
            green: "#166534",
        },
        extend: {
            spacing: {
                135: "35rem",
                27: "6.5rem",
                // card size
                365: "365px",
                196: "196px",
                500: "500px",
                800: "800px",
                100: "90px",
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                Black_Ops_One: ["Black Ops One", "sans-serif"],
                ubuntu: ["ubuntu", "sans-serif"],
            },
            fontSize: {
                smn: "8px",
            },
        },
    },
    plugins: [],
};
