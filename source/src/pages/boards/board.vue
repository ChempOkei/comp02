<script>
const canvas = document.getElementById("canvas");

function circle() {
  console.log('test')
}

export default {}
</script>

<template>
  <main>
    <button class="secondary-button">
      Квадрат
    </button>
    <button class="secondary-button" 
    @click="circle">
      Круг
    </button>
    <button class="secondary-button">
      Текст
    </button>
    <canvas id="canvas"></canvas>
  </main>
</template>

<style>
main {
  padding: 25px;
}
canvas {
  background: white;
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 20px;
  box-shadow: var(--shadow-lite);
  margin: auto;
  width: 1600px;
  height: 900px;
}
</style>
