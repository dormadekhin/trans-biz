<template>
	<div>
		<div class="">
			<inertia-link class="flex items-center group p-3" :href="route('dashboard')">
				<div :class="isUrl('dashboard') ? 'text-white' : 'text-blue-300 group-hover:text-white'">Dashboard</div>
			</inertia-link>
		</div>
		<div class="">
			<inertia-link class="flex items-center group p-3" :href="route('cities')">
				<div :class="isUrl('dashboard/cities') ? 'text-white' : 'text-blue-300 group-hover:text-white'">Города
				</div>
			</inertia-link>
		</div>
		<div class="">
			<inertia-link class="flex items-center group p-3" :href="route('rates')">
				<div :class="isUrl('dashboard/rates') ? 'text-white' : 'text-blue-300 group-hover:text-white'">Тарифы
				</div>
			</inertia-link>
		</div>
		<div class="">
			<inertia-link class="flex items-center group p-3" :href="route('rates.import')">
				<div :class="isUrl('dashboard/rates/import') ? 'text-white' : 'text-blue-300 group-hover:text-white'">
					Импорт
				</div>
			</inertia-link>
		</div>
	</div>
</template>

<script>

export default {
	props: {
		url: String,
	},
	methods: {
		isUrl(...urls) {
			if (urls[0] === '') {
				return this.url === ''
			}
			return urls.filter(url => url === this.url).length
		},
	},
}
</script>
