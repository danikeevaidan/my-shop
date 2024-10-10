axios.get('/api/products', {
    params: {
        category_id: 1,
        min_price: 100,
        max_price: 500,
        in_stock: true
    }
})
    .then(response => {
        console.log(response.data);
    })
    .catch(error => {
        console.error(error);
    });

const newProduct = {
    title: 'New Product',
    description: 'This is a new product',
    price: 99.99,
    stock: 10,
    published: true
};

axios.post('/api/products', newProduct)
    .then(response => {
        console.log('Product created:', response.data);
    })
    .catch(error => {
        console.error(error);
    });
