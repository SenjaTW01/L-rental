export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#EBEBEB",
                secondary: "#8FCB47",
                nav_color: "#ffffff",
                font_color_primary: '#222222',
                gray_white: "rgb(241 245 249)",
                sec3: "#E4E4E4",
                heading: "#164e63",
                text_desk: "#414042",
                footer: "#388CCB",
                white: "#ffffff",
                black: "#000000"
            },
            spacing: {
                135: "35rem",
                27: "6.5rem",
                // card size
                365: "365px",
                196: "196px",
                500: "500px",
                800: "800px"
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                Black_Ops_One: ["Black Ops One", "sans-serif"], // Ganti nama font dengan benar
                ubuntu: ["Ubuntu", "sans-serif"], // Pastikan nama font sesuai
            },
            fontSize: {
                smn: "8px",
            },
        },
    },
    plugins: [],
};
