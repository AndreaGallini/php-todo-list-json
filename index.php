<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div v-for="(data,index) in dati">
                <p :class=" data.done == true ? 'fatta' : 'daFare'">{{ data.text}}</p>
            </div>
            <input type="text" v-model="userTask.text" name="text">
            <button @click="addTask()">add</button>
        </div>

    </div>

</body>

</html>