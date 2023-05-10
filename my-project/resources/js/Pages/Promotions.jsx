import React from "react";
import { usePage } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import axios from "axios";

const Promotions = ({ auth }) => {
    const { promotions } = usePage().props;

    const handleClick = (promotion) => {
        axios
            .post("/api/promotions/" + promotion, {
                user_id: auth.user.id,
            })
            .then((response) => {
                alert(response.data);
                console.log(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    };

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    ¡Elige tu próximo destino! Para canjear tu código
                    promocional, dale click y se agregará a tu perfil.
                </h2>
            }
        >
            <div>
                {promotions.map((promotion) => (
                    <div key={promotion.id} className="py-4">
                        <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div className="p-6 text-gray-900 flex justify-between items-center">
                                    <div className="w-11/12 pr-4">
                                        {promotion.title}:
                                        {promotion.description}
                                    </div>
                                    <div className="w-1/12 ">
                                        <button
                                            className="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full"
                                            onClick={() =>
                                                handleClick(promotion.id)
                                            }
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-10 w-10"
                                                viewBox="0 0 20 20"
                                                fill="#6b7280"
                                                data-darkreader-inline-fill=""
                                            >
                                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd"
                                                ></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </AuthenticatedLayout>
    );
};

export default Promotions;
