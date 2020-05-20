#include "app.h"

wyjscie *
obliczenia_1_svc(wejscie *argp, struct svc_req *rqstp){
	static wyjscie result;

	result.suma = argp->x1 + argp->x2;

	return &result;
}
