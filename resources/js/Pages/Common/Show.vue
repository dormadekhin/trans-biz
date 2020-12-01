<template>
	<div>
		<div class="flex items-center text-sm font-medium mb-5">
			<inertia-link
				class="text-blue-700 hover:text-blue-800 font-bold text-1xl focus:outline-none focus:underline transition duration-150 ease-in-out"
				:href="route(baseRoute.route)">
				{{ baseRoute.title }}
			</inertia-link>
			<h1 class="font-bold text-2xl ml-2">
				<span class="text-indigo-400 font-medium">/</span>
				Просмотр
			</h1>
		</div>
		<div class="flex items-center my-4">
			<link-button
				:href="route(baseRoute.route+'.edit', item.id)"
				v-if="!item.deleted_at"
				color="blue"
				class="mr-3"
			>Изменить
			</link-button>
			<button v-if="!item.deleted_at" class="text-red-600 hover:underline" tabindex="-1" type="button"
			        @click="destroy">
				Удалить
			</button>
		</div>
		<div class="bg-white rounded shadow overflow-x-auto max-w-3xl divide-y">
			<div
				class="grid grid-cols-8	p-2"
				v-for="(label, attr) in fields"
			>
				<div class="col-span-3"> {{ label }}</div>
				<div class="col-span-5">{{ formatValue(_get(item, attr)) }}</div>
			</div>
		</div>
	</div>
</template>

<script>
import Layout from '@/Layouts/AppLayout'
import FormatMixin from "@/Mixins/FormatMixin";
import LinkButton from "@/Jetstream/LinkButton";
import _get from 'lodash/get';

export default {
	components: {
		LinkButton,
	},
	layout: Layout,
	mixins: [FormatMixin],
	props: {
		item: Object,
		baseRoute: Object,
		fields: Object,
	},
	data: () => ({}),
	methods: {
		_get,
		destroy() {
			if (confirm('Вы уверены что хотите удалить элемент?')) {
				this.$inertia.delete(this.route(this.baseRoute.route + '.destroy', this.item.id))
			}
		},
	}
}
</script>

<style scoped>

</style>
