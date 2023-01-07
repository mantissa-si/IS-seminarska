import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function Index({ auth }) {
    return (
        <AuthenticatedLayout auth={auth}>
            <head title="Player" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">Player 01</div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
