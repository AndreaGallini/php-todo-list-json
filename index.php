<?php

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
        <div v-for="(data) in dati">
            <p :class=" data.done == true ? 'fatta' : 'daFare'">{{ data.text}}</p>
        </div>
        <input type="text" v-model="userTask">
        <button @click="getData()">lancia</button>
        <button @click="addTask(userTask)">add</button>
    </div>
</body>

</html>