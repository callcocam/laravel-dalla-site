
import axios from "axios"

axios.defaults.withCredentials = true;

import interceptors from "@/utilities/interceptors"

interceptors.response(axios);

interceptors.request(axios);

export default axios
