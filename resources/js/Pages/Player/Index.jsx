import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function Index({ auth }) {
    return (
        <AuthenticatedLayout auth={auth}>
            <head title="Player" />
            
            <h1>WIP</h1>
        </AuthenticatedLayout>
    );
}
