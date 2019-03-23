export default [
	{
		path: '/',
		name: 'home',
		component: require('./pages/login').default
	},
	{
		path: '/dashboard',
		name: 'dashboard',
		component: require('./DashboardLayout').default,
		children: [
			{
				path: '/',
				component: require('./pages/dashboard').default
			},
		]
	}
];