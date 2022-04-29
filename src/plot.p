set terminal png size 600 
set output "results.png"
set title "10000 requests, 1000 concurrent requests"
set size ratio 0.6 
set grid 
set xlabel "requests"
set ylabel "response time (ms)"
plot "out_php_something_2.dat" using 9 smooth sbezier with lines title "PHP", "out_js_something_2.dat" using 9 smooth sbezier with lines title "JS", "out_node_client_2.dat" using 9 smooth sbezier with lines title "Node"
