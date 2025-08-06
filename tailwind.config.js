import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily:{
                Mooli: 'Mooli'
            },
            colors : {

                primary: {
                    DEFAULT: '#2A285E', 
                    soft: '#84B156',
                    softDark: '#6E9A45',
                    dark: '#012839',
                    darkLigher: '#336680',
                    grayWhite: '#ffffffd0'
                },

                bg : {
                    DEFAULT : "#ffffff",
                },

                border : {
                    DEFAULT :"#EEEEEE",
                },
            }
        },
        
    },

    plugins: [forms],
};
