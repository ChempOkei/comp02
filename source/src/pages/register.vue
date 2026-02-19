<template>
  <main class="auth-container">
    <div class="auth-card">
      <div class="auth-header">
        <h1>Регистрация</h1>
      </div>

      <form action="#" class="auth-form">
        <!-- Валидация на стороне страницы и сервера -->
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" class="auth-input" placeholder="user@example.com" 
          :value="email"
          @input="$emit('update:email', $event.target.value)" required/>
        </div>

        <div class="form-group">
          <label for="name">Имя</label>
          <input type="text" id="name" class="auth-input" placeholder="John" 
          :value="name"
          @input="$emit('update:name', $event.target.value)" required/>
        </div>

        <div class="form-group">
          <label for="password">Пароль</label>
          <input
            type="password"
            id="password"
            class="auth-input"
            placeholder="••••••••••••"
            minlength="8" 
            :value="password"
            @input="$emit('update:password', $event.target.value)" required
          />
        </div>

        <button type="submit" class="auth-btn" @click="reg">Зарегистрироваться</button>
      </form>

      <div class="auth-footer">
        <span>Уже есть аккаунт?</span>
        <RouterLink to="/login" class="auth-link">Войти</RouterLink>
      </div>
    </div>
  </main>
</template>

<script>
function reg() {
  const myHeaders = new Headers();
  myHeaders.append("Accept", "application/json");
  myHeaders.append("ClientId", "thejenja");
  myHeaders.append("Content-Type", "application/json");

  const raw = JSON.stringify({
    "email": "user@example.com",
    "name": "John",
    "password": "password123!"
  });

  const requestOptions = {
    method: "POST",
    headers: myHeaders,
    body: raw,
    redirect: "follow"
  };

  const response = fetch("http://localhost:3000/api/auth/register", requestOptions);
  const result = response.text();
  console.log(result)
}


export default {
  props: {
    name: String,
    email: String,
    password: String,
  },
  emits: ['update:email', 'update:password', 'update:name']
}
</script>

<style>
@import url(/auth.css);
</style>
