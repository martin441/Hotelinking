import React from "react";
import { usePage } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

const Promotions = ({ auth }) => {
    const { promotions } = usePage().props;
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Promotions
                </h2>
            }
        >
            <div>
                {promotions.map((promotion) => (
                    <div key={promotion.id} className="py-4">
                        <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div className="p-6 text-gray-900">
                                    {promotion.title}: {promotion.description}
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
