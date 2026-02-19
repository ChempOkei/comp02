<template>
  <main class="boards-content">
    <article class="board-card" v-for="board in boards" :key="board.id">
      <h2>{{ board.title }}</h2>

      <div class="public-link">
        <p>Публичная ссылка</p>
        <div class="link-content">
          <svg
            class="link-icon"
            viewBox="0 0 24 24"
            width="16"
            height="16"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
          >
            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
          </svg>
          <span>/board/{{board.public_hash}}</span>
        </div>
      </div>

      <div class="action-buttons">
      <RouterLink to="boards/$board.id" class="primary-button">Подключиться</RouterLink>
      <button class="secondary-button" v-if="board.is_public == 1" @click="like = !like">
          <svg width="18" height="18" viewBox="0 0 24 24" v-if="like">
            <path
              fill="#ef4444"
              stroke="#ef4444"
              d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
            />
          </svg>
          <svg width="18" height="18" viewBox="0 0 24 24" v-else>
            <path
              fill="#ef444400"
              stroke="#ef4444"
              d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
            />
          </svg>
          {{ board.likes_count }}
        </button>
      </div>
    </article>
  </main>
</template>

<script>
const myHeaders = new Headers()
myHeaders.append('Accept', 'application/json')
myHeaders.append('ClientId', 'thejenja')

const requestOptions = {
  method: 'GET',
  headers: myHeaders,
  redirect: 'follow',
}

const response = await fetch('http://localhost:3000/api/boards/public/list', requestOptions)
const result = await response.text()

export default {
  data() {
    return {
      boards: JSON.parse(result),
      like: false
    }
  },
}
</script>

<style>
.boards-content {
  padding: 25px;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
  gap: 25px;
}

.board-card {
  display: flex;
  flex-direction: column;
  gap: 15px;
  background: white;
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 20px;
  box-shadow: var(--shadow-lite);
}

.board-card h2 {
  margin: 0;
  font-size: 1.5rem;
  color: var(--primary);
}

.public-link {
  background: var(--background);
  border-radius: 8px;
  padding: 10px;
  border: 1px solid var(--border);
}

.public-link p {
  margin: 0 0 5px 0;
  font-size: 0.8rem;
  color: var(--muted);
  font-weight: 500;
}

.link-content {
  display: flex;
  align-items: center;
  gap: 8px;
  background: white;
  padding: 8px 10px;
  border-radius: 6px;
  border: 1px solid var(--border);
  font-size: 0.9rem;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.primary-button {
  margin-top: auto;
  background: var(--primary);
  color: white;
  border: none;
  padding: 10px;
  border-radius: 8px;
  font-weight: 500;
  cursor: pointer;
  margin: 0;
  flex: 1;
  text-decoration: none;
  text-align: center;
}

.primary-button:hover {
  background: color-mix(in srgb, var(--primary), transparent 10%);
}

.secondary-button {
  background: var(--card);
  color: var(--primary);
  border: 1px solid var(--border);
  padding: 10px 8px;
  border-radius: 8px;
  font-size: 0.85rem;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.secondary-button:hover {
  background: var(--background);
}

.action-buttons {
  display: flex;
  gap: 15px;
  /* height: 39.333px;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px; */
}

.action-buttons .secondary-button {
  justify-content: center;
}
</style>
