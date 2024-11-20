
const urlApi = 'http://localhost:80/api'
export const CallApi = {
    get: async (url) => {
        const response = await fetch(urlApi + url, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
        return {
            status: response.status,
            data: await response.json()
        }
    },
    post: async (url, data) => {
        const response = await fetch(urlApi + url, data, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: data
        })
        return {
            status: response.status,
            data: await response.json()
        }
    },
}