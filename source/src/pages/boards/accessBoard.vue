<template>
  <main class="boards-content">
    <!--
    <article class="board-card">
      <h2>Публичная (владелец)</h2>

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
          <span>/board/{hash}</span>
        </div>
      </div>

      <div class="action-buttons">
        <button class="primary-button">Подключиться</button>
        <button class="secondary-button">
          <svg width="18" height="18" viewBox="0 0 24 24">
            <path
              fill="#ef4444"
              stroke="#ef4444"
              d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
            />
          </svg>
          185
        </button>
      </div>

      <div class="action-buttons">
        <button class="secondary-button">Поделиться доступом</button>
      </div>
    </article>
    <article class="board-card">
      <h2>Публичная</h2>

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
          <span>/board/{hash}</span>
        </div>
      </div>

      <div class="action-buttons">
        <button class="primary-button">Подключиться</button>
        <button class="secondary-button">
          <svg width="18" height="18" viewBox="0 0 24 24">
            <path
              fill="#ef4444"
              stroke="#ef4444"
              d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
            />
          </svg>
          185
        </button>
      </div>
    </article>
    <article class="board-card">
      <h2>Нет лайка (Владелец)</h2>

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
          <span>/board/{hash}</span>
        </div>
      </div>

      <div class="action-buttons">
        <button class="primary-button">Подключиться</button>
        <button class="secondary-button">
          <svg width="18" height="18" viewBox="0 0 24 24">
            <path
              fill="#ef444400"
              stroke="#ef4444"
              d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
            />
          </svg>
          184
        </button>
      </div>
      <div class="action-buttons">
        <button class="secondary-button">Поделиться доступом</button>
      </div>
    </article>
    <article class="board-card">
      <h2>Нет лайка</h2>

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
          <span>/board/{hash}</span>
        </div>
      </div>

      <div class="action-buttons">
        <button class="primary-button">Подключиться</button>
        <button class="secondary-button">
          <svg width="18" height="18" viewBox="0 0 24 24">
            <path
              fill="#ef444400"
              stroke="#ef4444"
              d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
            />
          </svg>
          184
        </button>
      </div>
    </article>
    <article class="board-card">
      <h2>Неопубликована (владелец)</h2>

      <div class="public-link">
        <p>Публичная ссылка</p>
        <div class="link-content">
          <svg
            viewBox="0 0 24 24"
            width="16"
            height="16"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
          >
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
          </svg>
          <span>Не опубликована</span>
        </div>
      </div>

      <button class="primary-button">Подключиться</button>

      <div class="action-buttons">
        <button class="secondary-button">Поделиться доступом</button>
        <button class="secondary-button">Опубликовать</button>
      </div>
    </article>
    <article class="board-card">
      <h2>Неопубликована</h2>

      <div class="public-link">
        <p>Публичная ссылка</p>
        <div class="link-content">
          <svg
            viewBox="0 0 24 24"
            width="16"
            height="16"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
          >
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
          </svg>
          <span>Не опубликована</span>
        </div>
      </div>

      <div class="action-buttons">
        <button class="primary-button">Подключиться</button>
      </div>
    </article>-->
    <article class="board-card" v-for="board in boards" :key="board.id">
      <h2>{{ board.title }}</h2>

      <div class="public-link">
        <p>Публичная ссылка</p>
        <div v-if="board.is_public == 0" class="link-content">
          <svg
            viewBox="0 0 24 24"
            width="16"
            height="16"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
          >
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
          </svg>
          <span>Не опубликована</span>
        </div>
        <div v-else class="link-content">
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

      <div class="action-buttons"  v-if="board.is_public == 1">
        <button class="secondary-button">Поделиться доступом</button>
        <button class="secondary-button">Опубликовать</button>
      </div>
    </article>
  </main>
</template>

<script>
import { RouterLink } from 'vue-router'

const myHeaders = new Headers()
myHeaders.append('Accept', 'application/json')
myHeaders.append('ClientId', 'thejenja')
myHeaders.append(
  'Authorization',
  'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEsImVtYWlsIjoidXNlckBleGFtcGxlLmNvbSIsImlhdCI6MTc3MTQ3ODcxNCwiZXhwIjoxNzcyMDgzNTE0fQ.ERa9EsifgiptPFtdVxxsp3CJTuOkpfTSFxbbilHv8_E',
)

const requestOptions = {
  method: 'GET',
  headers: myHeaders,
  redirect: 'follow',
}

const response = await fetch('http://localhost:3000/api/boards/my', requestOptions)
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

<style></style>
