import React from "react";
import { render, getByText } from "@testing-library/react";
import Button from "./index";

test('Should not Allowed click if isDisabled is present', () => {
    const { container } = render(<Button isDisabled></Button>);
    expect(container.querySelector('span.disabled')).toBeInTheDocument();
});
test('Should Render Loading/Spinner', () => {
    const { container , getByText } = render(<Button isLoading></Button>);
    expect(getByText(/loading/i)).toBeInTheDocument();
    expect(container.querySelector('span')).toBeInTheDocument();
});