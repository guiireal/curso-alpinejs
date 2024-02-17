<!doctype html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Curso Alpine.js</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    .open {
      background-color: aqua;
    }

    .close {
      background-color: antiquewhite;
    }
  </style>
</head>
<body>
<div x-data="{
  names: ['João', 'Maria', 'Pedro'],
  name: '',
  addName() {
    this.names.push(this.name);
    this.name = '';
  },
  removeName(name) {
    this.names = this.names.filter((item) => item !== name);
  }
}">

  <template x-for="name in names" :key="name">
    <div>
      <p x-text="name"></p>
      <button @click="removeName(name)">Remover</button>
    </div>
  </template>

  <input type="text" x-model="name">
  <button @click="addName">Adicionar</button>
</div>
</body>
</html>
