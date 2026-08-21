package main

import (
	"fmt"
	"net/http"
)

// homeHandler handles incoming requests to the homepage
func homeHandler(w http.ResponseWriter, r *http.Request) {
	// Send an HTML response to the browser
	w.Header().Set("Content-Type", "text/html; charset=utf-8")
	fmt.Fprint(w, "<h1>Welcome to my Go Web App!</h1><p>This is built without any external frameworks.</p>")
}

func main() {
	// Register the handler function for the root path
	http.HandleFunc("/", homeHandler)

	// Start the server on port 8080
	fmt.Println("Server is running on http://localhost:8080")
	err := http.ListenAndServe(":8080", nil)
	if err != nil {
		fmt.Println("Error starting server:", err)
	}
}
