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
            colors : {

                primary: {
                    DEFAULT: '#2A285E', 
                    light: '#43409314', 
                    text : "#434093",
                    dark: '', 
                    hover: '#3C397C', 
                },

                bg : {
                    DEFAULT : "#ffffff",
                    soft : "#f5f6f6",
                    muted : "#f8f8f8",
                },

                border : {
                    DEFAULT :"#EEEEEE",
                },

                wrong : {
                    DEFAULT : "#E9A760",
                    light : "#E6B9321A"
                },
                error : {
                    DEFAULT : "#FF6969",
                    light : "#CF42421A",
                },
                success : {
                    DEFAULT : "#43AF63",
                    light : "#43AF631A",
                },
            }
        },
        
    },

    plugins: [forms],
};
