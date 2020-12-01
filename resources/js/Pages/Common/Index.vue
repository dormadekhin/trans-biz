<template>
	<div>
		<h1 class="mb-8 font-bold text-3xl">{{ baseRoute.title }}</h1>
		<div class="mb-6 flex justify-between items-center">
			<search-filter v-model="form.search" class="w-full max-w-md mr-4" @reset="reset"></search-filter>
			<link-button
				:href="route(baseRoute.route+'.create')"
				color="blue"
			>Добавить
			</link-button>
		</div>
		<div class="bg-white rounded shadow overflow-x-auto">
			<table class="w-full whitespace-no-wrap">
				<tr class="text-left font-bold">
					<th
						class="p-4"
						:class="{'w-1': attr === 'id'}"
						v-for="(label, attr) in fields"
					>{{ label }}
					</th>
					<th></th>
				</tr>
				<tr v-for="item in list.data" :key="item.id" class="hover:bg-gray-100 focus-within:bg-gray-100"
				    :class="{'opacity-50': item.deleted_at}">
					<td
						class="border-t p-4"
						v-for="(label, attr) in fields"
					>
						<inertia-link class="flex items-center focus:text-indigo-500"
						              :href="route(baseRoute.route+'.show', item.id)" v-if="!item.deleted_at">
							{{ formatValue(_get(item, attr)) }}
						</inertia-link>
						<span
							class="flex items-center focus:text-indigo-500"
							v-else>{{ formatValue(_get(item, attr)) }}</span>
					</td>
					<td class="border-t p-4">
						<button v-if="item.deleted_at" class="text-red-600 hover:underline" tabindex="-1" type="button"
						        @click="restore(item.id)">
							Восстановить
						</button>
					</td>
				</tr>
				<tr v-if="list.length === 0">
					<td class="border-t p-2" colspan="4">Элементы не найдены</td>
				</tr>
			</table>
		</div>
		<pagination :links="list.links"/>
	</div>
</template>

<script>
import Layout from '@/Layouts/AppLayout';
import Icon from '@/Shared/Icon';
import mapValues from 'lodash/mapValues';
import Pagination from '@/Shared/Pagination';
import pickBy from 'lodash/pickBy';
import SearchFilter from '@/Shared/SearchFilter';
import throttle from 'lodash/throttle';
import FormatMixinMixin from "@/Mixins/FormatMixin";
import LinkButton from "@/Jetstream/LinkButton";
import _get from 'lodash/get';

export default {
	metaInfo: {title: 'Список'},
	layout: Layout,
	components: {
		Icon,
		Pagination,
		SearchFilter,
		LinkButton,
	},
	props: {
		list: Object,
		filters: Object,
		fields: Object,
		baseRoute: Object,
	},
	mixins: [FormatMixinMixin],
	data() {
		return {
			form: {
				search: this.filters.search,
				trashed: this.filters.trashed,
			},
		}
	},
	watch: {
		form: {
			handler: throttle(function () {
				let query = pickBy(this.form)
				this.$inertia.replace(this.route('city', Object.keys(query).length ? query : {remember: 'forget'}))
			}, 150),
			deep: true,
		},
	},
	methods: {
		_get,
		reset() {
			this.form = mapValues(this.form, () => null)
		},
		restore(id) {
			if (confirm('Вы уверены что хотите восстановить элемент?')) {
				this.$inertia.put(this.route(this.baseRoute.route + '.restore', id))
			}
		},

	},
}
</script>
