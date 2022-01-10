<template>
  <div>
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6 bg-indigo-400 rounded">
      <h3 class="text-lg leading-6 font-medium text-white">
        <slot name="title" />
      </h3>
    </div>
    <div class="bg-white px-4 py-5 sm:px-6">
      <slot name="body" />
    </div>
    <div class="bg-white px-4 py-5 border-t border-gray-200 sm:px-6">
        <slot name="footer" />
    </div>
  </div>
</template>
<script>
export default {
  name: 'Card'
}
</script>
