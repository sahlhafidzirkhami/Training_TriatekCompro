import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                "triatek-primary": "#4c1920", // Warna utama (peach/oranye muda)
                "triatek-white": "#ffffff", // Warna putih
                "triatek-secondary": "#b8dff4", // Warna sekunder (biru muda)
                "triatek-dark": "#363b41", // Warna abu-abu gelap
                "triatek-accent": "#feffaf", // Warna aksen (krem)
                "triatek-red": "#aa1327",
            },
            fontFamily: {
                // Jadikan Poppins sebagai font default sans-serif
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
<<<<<<< HEAD
            // 🔥 Tambahan animasi gradien merah-hitam
            keyframes: {
                gradientFlow: {
                    "0%, 100%": { backgroundPosition: "0% 50%" },
                    "50%": { backgroundPosition: "100% 50%" },
                },
            },
            animation: {
                gradientFlow: "gradientFlow 12s ease infinite",
            },
=======
            backgroundImage: {
                'background-login': "url('/images/backgroundlogin.jpg')",
            }
>>>>>>> 50d3835eb67091d10c2742496cc8f254f1e0dcc7
        },
    },
    plugins: [],
};
