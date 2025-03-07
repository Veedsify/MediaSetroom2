<template>
      <div class="text-white" ref="statRef">
            <h2 class="mb-3 text-5xl lg:text-7xl font-black">{{ text.toLocaleString() }}</h2>
            <p>{{ description }}</p>
      </div>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue'

interface Props {
      description: string
      value: number
      delay: number
}

const props = defineProps<Props>()
const statRef = ref<HTMLElement | null>(null)
const text = ref(0)

let observer: IntersectionObserver

onMounted(() => {
      observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                  if (entry.isIntersecting) {
                        setTimeout(() => {
                              const interval = setInterval(() => {
                                    if (text.value >= props.value) {
                                          text.value = props.value
                                          clearInterval(interval)
                                          return
                                    }
                                    text.value++
                              }, 0.1)
                        }, props.delay)
                  }
            })
      })

      if (statRef.value) {
            observer.observe(statRef.value)
      }
})

onUnmounted(() => {
      if (observer) {
            observer.disconnect()
      }
})
</script>
