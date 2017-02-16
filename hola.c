#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define MAX 1024

//char palabra[30];

void main(){
	char *palabra = malloc(MAX);
	printf("Escribe algo: 	");
	fgets(palabra, MAX, stdin);
	printf("%s", palabra);
	for(int i=0; palabra[i] != '\0'; i++){
		printf("%c\n", palabra[i]);
	}
}