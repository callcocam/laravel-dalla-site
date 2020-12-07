export default {
    response(axios) {
        axios.interceptors.response.use(
            function(response) {
                return response;
            },
            function(error) {
                const { response } = error;
                console.log("response 401", error);
                // if (status === 401) {
                if (response && response.status === 401) {

                }
                return Promise.reject(error);
            }
        );
    },
    request(axios) {

    }
};
