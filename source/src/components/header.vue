<template>
  <header class="header">
    <div class="header-content">
      <div class="header-left">
        <RouterLink to="/boards"> <h2>Boardly</h2></RouterLink>
      </div>
      <div class="header-right">
        <RouterLink class="header-btn" to="/boards/public"
          >Публичные доски</RouterLink
        >
        <RouterLink class="header-btn logout" to="/login"
          ><svg
            viewBox="0 0 24 24"
            width="16"
            height="16"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
          >
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
            <polyline points="16 17 21 12 16 7" />
            <line x1="21" y1="12" x2="9" y2="12" />
          </svg>
          Выйти</RouterLink
        >
      </div>
    </div>
  </header>
</template>

<script>
export default {}
</script>

<style>
.header {
  background-color: var(--card);
  border-bottom: 1px solid var(--border);
  padding: 12px 25px;
  box-shadow: 0 2px 8px var(--shadow-lite);
  position: sticky;
  top: 0;
  z-index: 10;
}

.header-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1400px;
  margin: 0 auto;
}

.header-left {
  display: flex;
  align-items: center;
  gap: 20px;
}

.header-left h2 {
  margin: 0;
  font-size: 1.3rem;
  color: var(--primary);
  font-weight: 600;
}

.header-right {
  display: flex;
  align-items: center;
  gap: 15px;
}

.header-btn {
  background: var(--card);
  color: var(--primary);
  border: 1px solid var(--border);
  padding: 8px 16px;
  border-radius: 8px;
  font-weight: 500;
  font-size: 0.9rem;
  cursor: pointer;
  transition: all 0.2s;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  text-decoration: none;
}

.header-btn:hover {
  background: var(--background);
  border-color: var(--border-accent);
}

.header-btn.logout:hover {
  background: #ef4444;
  border-color: #ef4444;
  color: white;
}
</style>
