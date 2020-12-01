export default {
	methods: {
		formatValue(val) {
			return typeof val === 'boolean' ? (val ? 'Да' : 'Нет') : val;
		}
	}
}
