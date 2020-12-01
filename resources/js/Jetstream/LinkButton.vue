<template functional>
	<inertia-link
		class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150"
		:class="(data.staticClass || '' )+` bg-${props.color}-800 hover:bg--700 active:bg-${props.color}-900`"
		:href="props.href"
		v-bind="data.attrs"
	><slot></slot>
	</inertia-link>
</template>

<script>
export default {
props: {
	color: String,
	href: String,
}
}
</script>
