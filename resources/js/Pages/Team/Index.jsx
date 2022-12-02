import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function Index({ auth }) {
    return (
        <AuthenticatedLayout auth={auth}>
            <head title="Team" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">Picke</div>
                    </div>
                    <div>
                        <h1>WIP!</h1>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
