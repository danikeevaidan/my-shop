const order = {
    customer_name: 'John Doe',
    customer_email: 'john@example.com',
    customer_address: '123 Main St',
    items: [
        { product_id: 1, quantity: 2 },
        { product_id: 2, quantity: 1 }
    ]
};

axios.post('/api/orders', order)
    .then(response => {
        console.log('Order created:', response.data); // Успешно созданный заказ
    })
    .catch(error => {
        console.error(error.response.data); // Ошибка валидации или другая ошибка
    });
