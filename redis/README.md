kubectl cp name-of-your-pod:/path/to/your_folder /path/on_your_host/to/your_folder
kubectl cp frontend-85595f5bf9-58s8q:"/var/www/html" "C:/Users/ocset/Desktop/e"


kubectl delete deployment -l app=redis
kubectl delete service -l app=redis
kubectl delete deployment frontend
kubectl delete service frontend