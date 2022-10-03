<template>

<h1>Vue Spiral</h1>
<Button/>
    <div class="spiral">
        <svg viewBox="0 0 728 400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <path id="MyPath"
                    d="M363.32 203.973c3.65 3.65-3.119 6.72-6.066 6.066-7.986-1.773-9.27-12.002-6.066-18.198 5.731-11.082 20.612-12.38 30.33-6.065 14.26 9.267 15.584 29.339 6.065 42.46-12.686 17.49-38.107 18.828-54.592 6.067-20.745-16.06-22.09-46.897-6.066-66.725 19.408-24.015 55.695-25.365 78.856-6.066 27.294 22.744 28.648 64.502 6.066 90.988-26.071 30.58-73.313 31.935-103.12 6.066-33.869-29.394-35.225-82.127-6.066-115.252 32.713-37.16 90.944-38.518 127.384-6.065 40.455 36.028 41.813 99.762 6.065 139.515-39.342 43.75-108.581 45.11-151.646 6.065-47.048-42.655-48.408-117.402-6.066-163.778 45.966-50.346 126.224-51.706 175.91-6.066 53.645 49.277 55.005 135.047 6.066 188.042-52.587 56.945-143.87 58.305-200.174 6.066-60.244-55.895-61.605-152.693-6.066-212.306 59.204-63.545 161.518-64.906 224.438-6.065 53.59 50.116 66.879 131.92 33.787 197.072"/>
            </defs>

            <use xlink:href="#MyPath" fill="none" stroke-width="0" stroke="black"  />

            <text font-family="Verdana" font-size="5">
                <textPath xlink:href="#MyPath">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut erat ut nisl vestibulum rhoncus. In ex lorem, interdum et mi ut, eleifend congue nibh. Vivamus at mollis quam. Donec eu tincidunt nunc, at eleifend elit. Aliquam sed erat et mi rutrum mollis ac eu mi. Aenean eleifend sapien at pellentesque vulputate. Donec pulvinar, purus non luctus lacinia, lectus augue mollis velit, vitae laoreet sapien est sed est. Aliquam dignissim, urna a venenatis ultrices, ligula felis luctus ex, non accumsan lacus ante quis eros. Ut elementum leo ac felis gravida, ac sagittis mi ultrices. Donec tincidunt augue ligula, eget malesuada.
                </textPath>
            </text>

        </svg>
    </div>
</template>

<script setup>
import Button from './components/Button.vue'


</script>


<style scoped>

h1{
    text-align: center;
    margin: 40px 0;
}

.spiral{
    margin-top:-70px;
}

</style>