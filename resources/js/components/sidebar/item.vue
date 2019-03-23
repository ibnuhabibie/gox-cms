<template>
  <li :class="{ active: isActive }">
    <a :href="path" title="Dashboard">
      <span>
        <feather :type="icon"/>
      </span>
    </a>
  </li>
</template>

<script>
export default {
  props: {
    isActive: {
      type: Boolean,
      default: false
    },
    icon: {
      type: String,
      default: 'aperture'
    },
    title: {
      type: String,
      default: ''
    },
    path: {
      type: String,
      default: '/'
    }
  }
};
</script>
